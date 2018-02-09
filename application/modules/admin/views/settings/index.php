<!DOCTYPE html>
<html>
<head>
    <title>Settings Config</title>
</head>
<body>

<!-- form config.php -->
<?php 
    $fileConfig = $_SERVER['DOCUMENT_ROOT'].'/application/config/config.php'; //config
?>
<form action="" method="post" accept-charset="utf-8">
    <p>base url</p>
    <input type="text" name="configURL" value="<?= $this->admin_model->getConfigBaseUrl($fileConfig); ?>">
    <p>language</p>
    <select name="configLang">
        <option value="english">English</option>
        <option value="french">French</option>
        <option value="german">German</option>
        <option value="hungarian">Hungarian</option>
        <option value="russian">Russian</option>
        <option value="spanish">Spanish</option>
        <option value="thai">Thai</option>
    </select>

    <p>char set</p>
    <input type="text" name="configCharSet" value="<?= $this->admin_model->getConfigCharSet($fileConfig); ?>">
    <p>sess expiration</p>
    <input type="text" name="configSessExpiration" value="<?= $this->admin_model->getConfigSessExpiration($fileConfig); ?>">
    <p>button save only config.php</p>
    <button type="submit" name="submitConfig">Submit Config</button>
</form>
<?php if(isset($_POST['submitConfig'])){
    $data = array(
        'filename' => $fileConfig,
        'configURL' => str_replace(' ', '', $_POST['configURL']), //url
        'actualURL' => $this->admin_model->getConfigBaseUrl($fileConfig), //url
        'configLang' => str_replace(' ', '', $_POST['configLang']), //lang
        'actualLang' => $this->admin_model->getConfigLanguage($fileConfig), //lang
        'configCharSet' => str_replace(' ', '', $_POST['configCharSet']), //Char set
        'actualCharSet' => $this->admin_model->getConfigCharSet($fileConfig), //Char set
        'configSess' => str_replace(' ', '', $_POST['configSessExpiration']), //Sessions
        'actualSess' => $this->admin_model->getConfigSessExpiration($fileConfig), //Sessions
    );
    $this->admin_model->settingConfig($data);
}?>
<!-- form config.php -->








<hr>


<!-- form fixcore.php -->
<?php 
    $fileFixCore = $_SERVER['DOCUMENT_ROOT'].'/application/config/fixcore.php'; //fixcore
?>
<form action="" method="post" accept-charset="utf-8">
    <p>project name</p>
    <input type="text" name="fixcoreProjectName" value="<?= $this->admin_model->getFixCoreProjectName($fileFixCore); ?>">

    <p>Timezone</p>
    <p>http://php.net/manual/en/timezones.php</p>
    <input type="text" name="fixcoreTimeZone" value="<?= $this->admin_model->getFixCoreTimeZone($fileFixCore); ?>">

    <p>discord id</p>
    <input type="text" name="fixcoreDiscordInv" value="<?= $this->admin_model->getFixCoreDiscordInv($fileFixCore); ?>">

    <p>realmlist</p>
    <input type="text" name="fixcoreRealmlist" value="<?= $this->admin_model->getFixCoreRealmlist($fileFixCore); ?>">

    <p>staff forum color</p>
    <p>Default: 00b4ff</p>
    <input type="text" name="fixcoreStaffColor" value="<?= $this->admin_model->getFixCoreStaffColor($fileFixCore); ?>">

    <p>theme name</p>
    <input type="text" name="fixcoreTheme" value="<?= $this->admin_model->getFixCoreThemeName($fileFixCore); ?>">
    
    <p>button save only fixcore.php</p>
    <button type="submit" name="submitFixCore">Submit FixCore</button>
</form>
<?php if(isset($_POST['submitFixCore'])){
    $datafx = array(
        'filename' => $fileFixCore,
        'fixcoreName' => str_replace(' ', '', $_POST['fixcoreProjectName']),
        'actualName' => $this->admin_model->getFixCoreProjectName($fileFixCore),
        'fixcoreTimeZone' => str_replace(' ', '', $_POST['fixcoreTimeZone']),
        'actualTimeZone' => $this->admin_model->getFixCoreTimeZone($fileFixCore),
        'fixcoreDiscord' => str_replace(' ', '', $_POST['fixcoreDiscordInv']),
        'actualDiscord' => $this->admin_model->getFixCoreDiscordInv($fileFixCore),
        'fixcoreRealmlist' => str_replace(' ', '', $_POST['fixcoreRealmlist']),
        'actualRealmlist' => $this->admin_model->getFixCoreRealmlist($fileFixCore),
        'fixcoreStaffColor' => str_replace(' ', '', $_POST['fixcoreStaffColor']),
        'actualStaffColor' => $this->admin_model->getFixCoreStaffColor($fileFixCore),
        'fixcoreThemeName' => str_replace(' ', '', $_POST['fixcoreTheme']),
        'actualTheme' => $this->admin_model->getFixCoreThemeName($fileFixCore),
    );
    $this->admin_model->settingFixCore($datafx);
}?>
<!-- form fixcore.php -->


<hr>
<?php 
/* database section config END */
$fileDatabase   = $_SERVER['DOCUMENT_ROOT'].'/application/config/database.php'; //database
/* database section config END */
/* captcha section config START */
$fileCaptcha    = $_SERVER['DOCUMENT_ROOT'].'/application/config/recaptcha.php'; //captcha
/* captcha section config END */


/* bugtracker section config START */
if ($this->m_modules->getStatusLadBugtracker() == '1')
{
    $fileCaptcha    = $_SERVER['DOCUMENT_ROOT'].'/application/modules/bugtracker/config/bugtracker.php'; //bugtracker
}
/* bugtracker section config END */

/* donate section config START */
if ($this->m_modules->getDonation() == '1')
{
    $fileDonate    = $_SERVER['DOCUMENT_ROOT'].'/application/modules/donate/config/donate.php'; //donate
}
/* donate section config END */

/* store section config START */
if ($this->m_modules->getStatusStore() == '1')
{
    $fileStore    = $_SERVER['DOCUMENT_ROOT'].'/application/modules/shop/config/store.php'; //donate
}
/* store section config END */

?>


</body>
</html>