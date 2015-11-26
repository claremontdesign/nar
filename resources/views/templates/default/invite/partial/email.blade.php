{!! view(cd_nar_view_name('email.header')) !!}
Hi <?php echo $name?>,
<br />
<br />
<?php echo $comment?>
<br />
<br />
Link: <a href="{{ cd_route('home') }}">Natural Home Rugs</a>
<br />
<br />
{!! view(cd_nar_view_name('email.footer')) !!}