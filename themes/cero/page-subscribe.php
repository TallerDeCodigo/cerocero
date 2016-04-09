<?php

get_header();

?>


<section id="bannerlogo">
    <a href="<?php echo site_url(); ?>">
        <img src="<?php echo THEMEPATH; ?>images/logocero.svg">
    </a>
</section>

<section class="texto">
        <?php the_content(); ?>
</section>

<?php
$apikey = '88d3b02931ad5bd3f881008b39e60330-us13';
$listid = '7de2b0b5ae';
$correo = $_POST["correo"];
$server = "us13";
$merge_vars = array('FNAME'=>'null', 'LNAME'=>'null');


function mc_subscribe($correo, $fname, $apikey, $listid, $server) {

    $auth = base64_encode( 'LogisticaGeneral:'.$apikey);
    $data = array(
        'apikey'        => $apikey,
        'email_address' => $correo,
        'status'        => 'pending',
        'merge_fields'  => array(
            'FNAME' => $fname
            )
        );  
    $json_data = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://us13.api.mailchimp.com/3.0/lists/7de2b0b5ae/members/');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
        'Authorization: Basic '.$auth));
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/3.0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    $result = curl_exec($ch);

    //echo $result;

    if ($debug) {
       // var_dump($result);
        die('<br><br> Te hemos enviado un correo de confirmación, por favor revisa tu correo');
    }
    die();
};


mc_subscribe($correo, "", $apikey, $listid, $server);


?>



<?php

get_footer();

?>