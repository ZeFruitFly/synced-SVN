<?php
$this->bufferCreate();$t_creation__mtt_0 = 'design.mtt';
$this->buf .= '
<h1>Create a Song</h1>

<p>You can build your own songs with the <a href="http://www.stepmania.com/wiki/Downloads" target="_blank">Stepmania</a> editor. Upload them here to use in Whirled Beat, but make sure to <a href="http://wiki.whirled.com/Whirled_Beat#Creating">read our guide</a> first.</p>

<form onsubmit="return submitUpload();" action="?do=upload" enctype="multipart/form-data" method="POST">
<p><label for="sm">Stepfile (.sm): <span class="required">*</span></label> <input type="file" name="sm"/></p>
<p><label for="music">Audio (.mp3 or .ogg): <span class="required">*</span></label> <input type="file" name="music"/></p>
<p><label for="uploaderName">Your Whirled name:</label> <input type="text" name="uploaderName"/></p>
<p><label for="uploaderId">Your Whirled ID:</label> <input type="text" name="uploaderId"/> <span style="font-size:x-small">The number in your Whirled profile URL, (eg: <a href="http://whirled.com/#people-878" target="_blank">Aduros</a> is 878). Whirled Beat will use this to award your Whirled account when people play your song.</span></p>

<input id="submitButton" type="submit" value="Upload"/>
<img id="submitProgress" src="images/progress.gif"/>
</form>

<p>This may take a while, seriously! Go grab a coffee and come back in a minute.</p>

<script type="text/javascript">
//<![CDATA[
function submitUpload ()
{
    document.getElementById("submitButton").disabled = true;
    document.getElementById("submitProgress").style.display = "inline";
    return true;
}
document.getElementById("submitButton").disabled = false;
document.getElementById("submitProgress").style.display = "none";
//]]>
</script>

';
$this->includeTemplate($t_creation__mtt_0, 'creation__mtt', $ctx);
$this->buf .= '
';

?>