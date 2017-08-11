<?php

require_once 'class.Emailer.php';
$mail = new Emailer;
$mail->setFrom('Admin');
$mail->addHeaders(
	[
		'MIME-Version: 1.0'.PHP_EOL, 
		'Content-type:text/html;charset=UTF-8'.PHP_EOL,
		'From: '.$mail->getFrom().''.PHP_EOL
	]
);
$mail->setRecipient('dawid.ciosek@vp.pl');
$mail->setTopic('E-mail topic');
$mail->setContent('
	<div style="background-color: rebeccapurple; color: white; padding: 10px; width: 100%">Lorem ipsum dolor sit amet.</div>
	<div style="color: black">
		<h2>Lorem ipsum dolor.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus excepturi minima aliquid eum sapiente incidunt a. Veniam illum ducimus, nostrum.</p>
		<h2>Lorem ipsum.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo pariatur, commodi ipsam libero quis adipisci nesciunt eum, aperiam id dolor aut. Aperiam cum, saepe dicta voluptates maxime doloremque sed ipsam distinctio. Unde, placeat, esse. Doloremque temporibus culpa quas maxime recusandae officiis optio placeat, quam debitis molestias reprehenderit doloribus ab, dolor.</p>
		<h2>Lorem ipsum dolor sit amet.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ut atque, voluptatum praesentium sint quis aperiam unde eligendi aspernatur similique quasi, minima ducimus maiores quia sit consequatur iusto corrupti fugit pariatur cumque ad? Deserunt dolor obcaecati perspiciatis aperiam animi maiores nam placeat autem accusamus, eos odio et harum officia hic est natus sint, impedit non dolorem veniam ipsum dicta ullam. Illo repellat modi eius nulla magnam tenetur porro ipsum. Autem tempora voluptas consequatur ratione at! Quia similique et mollitia maiores debitis, nam soluta odit placeat perspiciatis distinctio autem voluptas voluptates quam animi magni amet repudiandae repellat, quos. Id, itaque, deleniti.</p>
	</div>
');
if ($mail->sendEmail() == true) {
	echo 'Your e-mail was sended to: <strong>'.$mail->getRecipient().'</strong>';
} else {
	echo 'Your e-mail could be not send.';
}