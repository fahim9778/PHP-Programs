<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 06-Jan-19
 * Time: 12:06 PM
 */
//complete code for editor-html.php
return "<form id='editor' method='post' action='index.php?page=editor'>
    <fieldset>
        <legend>New Entry Submission</legend>
        <label>Title</label>
        <input type='text' name='title'  maxlength='150'>
        <label>Entry</label>
        <textarea></textarea>
        
        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='Save'>
            <input type='submit' name='action' value='Delete'> 
        </fieldset>
    </fieldset>
</form>";