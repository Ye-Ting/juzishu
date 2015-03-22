<?php
/**
 * The model file of voice module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     voice
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php
class voiceModel extends model
{
    /**
     * Get one voice by id.
     *
     * @param int $id
     * @access public
     * @return array
     */
    public function getByID($id)
    {
        $voice = $this->dao->select('*')->from(TABLE_CONFIG)->where('id')->eq($id)->fetch();
        if(!$voice) return false;

        return json_decode($voice->value);
    }

    /**
     * Get voices list sorted by key.
     *
     * @access public
     * @return array
     */
    public function getList()
    {
        $voices = $this->dao->select('*')->from(TABLE_CONFIG)
            ->where('owner')->eq('system')
            ->andWhere('module')->eq('common')
            ->andWhere('section')->eq('voices')
            ->orderBy('`key`')
            ->fetchAll();

        foreach($voices as $key => $voice)
        {
            $id = $voice->id;
            $voices[$key] = json_decode($voice->value);
            $voices[$key]->id = $id; 
        }

        return $voices;
    }

    /**
     * Create a voice.
     *
     * @access public
     * @return bool
     */
    public function create($image)
    {
        $voice = fixer::input('post')
            ->stripTags('content', $this->config->allowedTags->front)
            ->remove('files')
            ->get();

        // $voice->label       = array_values($voice->label);
        // $voice->buttonClass = array_values($voice->buttonClass);
        // $voice->buttonUrl   = array_values($voice->buttonUrl);
        // if($voice->backgroundType == 'color')
        // {
        //     $this->dao->insert('voice')->data($voice, 'label,buttonClass,buttonUrl')->batchCheck('backgroundColor,height', 'notempty')->check('height', 'ge', 100);
        //     if(dao::isError()) return false;
        // }

        $setting = new stdclass();
        $setting->owner   = 'system';
        $setting->module  = 'common';
        $setting->section = 'voices';
        $setting->value   = helper::jsonEncode($voice);

        $voiceKeys    = isset($this->config->voices) ? array_keys((array)$this->config->voices) : array(0);
        $setting->key = max($voiceKeys) + 1;

        $this->dao->insert(TABLE_CONFIG)->data($setting)->exec();

        return !dao::isError();
    }

    /**
     * Update a voice.
     *
     * @param int $id
     * @access public
     * @return bool
     */
    public function update($id)
    {
        //$image = $this->uploadImage();

        $voice = fixer::input('post')
        ->stripTags('content', $this->config->allowedTags->front)
        ->remove('files')
        ->get();

        $this->dao->update(TABLE_CONFIG)
            ->set('value')->eq(helper::jsonEncode($voice))
            ->where('id')->eq($id)
            ->exec();

        return !dao::isError();
    }

    /**
     * Sort voices
     *
     * @access public
     * @return bool
     */
    public function sort()
    {
        /* Count maxKey to avoid  duplicate entry system-common-voices-key. */
        $maxKey = $this->dao->select('max(cast(`key` as signed)) as maxKey')->from(TABLE_CONFIG)
            ->where('owner')->eq('system')
            ->andWhere('module')->eq('common')
            ->andWhere('section')->eq('voices')
            ->fetch('maxKey');

        /* Reset key to zero to make sure key wouldnot overflow. */
        if($maxKey > 1000) $maxKey = 0;

        $orders = isset($_POST['order']) ? $_POST['order'] : array();
        foreach($orders as $id => $order)
        {
            /* Add maxKey to key ensure unique.*/
            $key = $maxKey + $order;
            $this->dao->update(TABLE_CONFIG)
                ->data(array('key' => $key))
                ->where('id')->eq($id)
                ->exec();
        }

        return !dao::isError();
    }

    /**
     * upload image for voice. 
     *
     * @access public
     * @return string webPath
     */
    public function uploadImage()
    {
        $images = $this->loadModel('file')->saveUpload('voice');
        if(!$images) return false; 

        $imageIdList = array_keys($images);
        $image       = $this->file->getById($imageIdList[0]); 

        return $image->webPath;
    }

    /**
     * Delete a voice.
     *
     * @param int $id
     * @return bool
     */
    public function delete($id, $table = null)
    {
        $this->dao->delete()->from(TABLE_CONFIG)
            ->where('id')->eq($id)
            ->exec();
        return !dao::isError();
    }
}
