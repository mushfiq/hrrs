<?php

/**
 * @abstract model for the upload form
 * @author php@evoknow.com [SHL]
 */

   class UploadForm extends CFormModel
   {
      public $title;
      public $description;
      public $picture;
      public $size;
      public $access;
   
   /**
   * Validation rules for the form
   */
   public function rules()
   {
      return array(
                     array('title, description','required'),
                     array('picture','file','types'=>'jpg, jpeg, gif, png, bmp'),
                     array('access','boolean'),
                     array('size','safe'),                     
                  );
   }
   
   public function attributeLabels()
   {
      return array(
                     'title'        =>  'Title',
                     'description'  =>  'Description',
                     'picture'      =>  'Picture (file will be uploaded once selected)',
                     'size'         =>  'Size to upload',
                     'access'       =>  'Show everyone',
                     
                  );
   }
   
}

?>