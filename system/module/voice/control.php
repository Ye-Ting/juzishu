<?php
/**
 * The control file of voice module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     voice
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class voice extends control
{
    /**
     * Browse voices in admin.
     * 
     * @access public
     * @return void
     */
    public function admin()
    {
        $this->view->title  = $this->lang->voice->admin;
        $this->view->voices = $this->voice->getList();
        $this->display();
    }

    /**
     * Create a voice.
     *
     * @access public 
     * @return void
     */
    public function create()
    {
        if($_POST)
        {
            if($this->post->backgroundType == 'image')
            {   
                if(empty($_FILES)) $this->send(array('result' => 'fail', 'message' => $this->lang->voice->noImageSelected));

                $image = $this->voice->uploadImage();
                if(!$image) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            }
            else
            {
                $image = null;
            }

            if($this->voice->create($image))
            {
                $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => $this->inlink('admin')));
            }

            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->display(); 
    }

    /**
     * Edit a voice.
     *
     * @param int $id
     * @access public
     * @return void
     */
    public function edit($id)
    {
        if($_POST)
        {
            if($this->voice->update($id))
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate'=>$this->inLink('admin')) );
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->id    = $id;
        $this->view->voice = $this->voice->getByID($id);
        $this->display();
    }

    /**
     * Delete a voice.
     *
     * @param int $id
     * @retturn void
     */
    public function delete($id)
    {
        if($this->voice->delete($id)) $this->send(array('result' => 'success'));
        $this->send(array('result' => 'fail', 'message' => dao::getError()));
    }

    /**
     * Sort voices.
     *
     * @access public
     * @return void
     */
    public function sort()
    {
        if($this->voice->sort()) $this->send(array('result' => 'success', 'message' => $this->lang->voice->successSort));
        $this->send(array('result' => 'fail', 'message' => dao::getError()));
    }
}
