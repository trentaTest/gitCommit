<?php
class vm_gitcommitdisplayModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $ch = curl_init();
        
        $certificate_location = 'F:\www\wamp64\www\gitcommit\modules\vm_gitcommit\cert\cacert-2020-10-14.pem'; //mandatory to create a curl connection
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);

        curl_setopt($ch, CURLOPT_USERAGENT, 'trentaTest');     
        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://api.github.com/repos/trentaTest/gitCommit/commits",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer <add personnal token>"
            ),
        ));
        
        $response = curl_exec($ch);
        /* To debug curl connection
        $err = curl_error($ch);
        curl_close($ch);
        $errNo = curl_errno($ch);
        $description = curl_strerror(curl_errno($ch)); 
        var_dump($description);
         */

        $gitCommits = json_decode($response);
        
        $this->context->smarty->assign(array(
            'nb_product' => Db::getInstance()->getValue('SELECT COUNT(*) FROM '._DB_PREFIX_.'product'),
            'categories' => Db::getInstance()->executeS('SELECT `name` FROM `'._DB_PREFIX_.'category_lang` WHERE `id_lang` = '.(int)$this->context->language->id),
            'shop_name' => Configuration::get('PS_SHOP_NAME'),
            'gitCommits' => $gitCommits
        ));
        

        $this->setTemplate('module:vm_gitcommit/views/templates/front/display.tpl');
    }
}