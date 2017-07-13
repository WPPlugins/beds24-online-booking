<h2>Developer Information</h2>
<div class="b24_section section-text">
<h3>Template Files</h3>
<p>The HTML for booking box widgets are provided as a file in the theme-files directory.</p>
<p>These files can be edited to create your own customised booking widgets.</p>
<p>The files can be moved to and distributed in your theme directory. This will avoid over-writing if you update the plugin. If the file exists in the theme directory it is used, if it does not exist in the theme directory the file in the plugin directory is used.</p>

<h4>Languages</h4>
<p>The files contain translation variables which contain content for the selected language.</p>
<p>Individual files for specific languages can also be created. The files must be named with the 2 letter language code as per the following example for French beds24-box-fr.php. If a matching language specific file is found it will be used, otherwise the standard file will be used.</p>
</div>

<p><strong>Debug Mode: </strong> You will see warnings about depreciated functions with debug mode enabled. The plugin is fully functioning with the depreciated features and these warnings can be ignored.
</p>



<div class="b24_section section-text">
<p>
If you upload the files to your theme server you need to remove all php language references from the file.
Example: 
</p>

<p>
Replace 
&lt;?php echo $translate['Check In']; ?>
</p>

<p>
with
Check In
</p>

<p>
You will need to do this for all php language references and also replace 
</p>

<p>
&lt;?php echo $translate['month'.date('n', strtotime($thismonthyear.' + '.$i.' months'))] ?>
</p>

<p>
with
&lt;?php echo date('n', strtotime($thismonthyear.' + '.$i.' months')) ?> /
</p>

<p>
If you use multiple languages you can 
create a language file for each language by adding the language code to the file
</p>

<p>
Example: beds24-box-fr.php
will create a French language booking box. 
</p>
</div>
