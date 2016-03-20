<?php

/**
 * Outputs a web page 'header'.
 *
 * Outputs the preamble, the head (including title and link to stylesheet), the body start
 * tag, and an h1 (the same as the title).
 * @param $title the page title and also the page's main h1 heading
 * @param $stylesheet the URL of the page's CSS stylesheet
 */
function output_header( $title, $stylesheet )
{
    echo
        '<!DOCTYPE html>
         <html lang="en">
         <head>
		 <meta charset="utf-8" />';
    echo "<title>{$title}</title>";
    echo "<link rel=\"stylesheet\" href=\"{$stylesheet}\" />";
    echo
        '</head>
         <body>';
    echo "<h1>{$title}</h1>";
}

/**
 * Outputs a web page footer.
 *
 * Outputs a footer containing a copyright notice, the body end tag, and the html end tag.
 * @param $organization the copyright owner
 */
function output_footer( $organization )
{
    echo '<footer>
		  <small>';
    echo '&copy; ' . date('Y') . ' ' . $organization;
    echo
        '</small>
		 </footer>
         </body>
         </html>';
}

/**
 * Outputs an HTML paragraph element.
 *
 * @param $text the element's textual content
 */
function output_paragraph( $text )
{
    echo "<p>{$text}</p>";
}

/**
 * Outputs a submit button for an HTML form.
 *
 * @param $button_label the text to appear on the button
 */
function output_submit_button( $button_label )
{
    echo "<input type=\"submit\" name=\"submit\" value=\"{$button_label}\" />";
}

/**
 * Outputs a reset button for an HTML form.
 *
 * @param $button_label the text to appear on the button
 */
function output_reset_button( $button_label )
{
    echo "<input type=\"reset\" name=\"reset\" value=\"{$button_label}\" />";
}

/**
 * Outputs a text field for an XHTML form.
 *
 * Outputs a text field for an HTML form, with an accompanying label, all wapped in a div.
 * @param $id the value of the HTML id attribute
 * @param $label the content of the HTML label element
 * @param $name the value of the HTML name attribute
 * @param $size the value of the HTML size attribute
 * @param $maxlength the value of the HTML maxlength attribute
 * @param $value the value of the HTML value attribute
 * @param $is_disabled a Boolean: if true, this text field is disabled (disabled="disabled"); if false, the user can enter data into it
 */
function output_textfield( $id, $label, $name, $size,
                    $maxlength, $value, $is_disabled )
{
    echo "<div>";
    echo "<label for=\"{$id}\">{$label}</label>";
    echo "<input type=\"text\" id=\"{$id}\" name=\"{$name}\"
        size=\"{$size}\" maxlength=\"{$maxlength}\" value=\"{$value}\" ";
    echo $is_disabled ? "disabled=\"disabled\" " : "";
    echo "/>";
    echo "</div>";
}

/**
 * Outputs a password field for an HTML form.
 *
 * Outputs a password field for an HTML form, with an accompanying label, all wapped in a div.
 * @param $id the value of the HTML id attribute
 * @param $label the content of the HTML label element
 * @param $name the value of the HTML name attribute
 * @param $size the value of the HTML size attribute
 * @param $maxlength the value of the HTML maxlength attribute
 * @param $value the value of the HTML value attribute
 */
function output_passwordfield( $id, $label, $name, $size,
                    $maxlength, $value )
{
    echo "<div>";
    echo "<label for=\"$id\">{$label}</label>";
    echo "<input type=\"password\" id=\"{$id}\" name=\"{$name}\"
        size=\"{$size}\" maxlength=\"{$maxlength}\" value=\"{$value}\" />";
    echo "</div>";
}

/**
 * Outputs an HTML unordered list (ul) element from an array.
 *
 * @param $items the array of items that will form the list's items (li)
 */
function output_unordered_list( &$items )
{
    echo "<ul>";
    foreach ($items as $item)
    {
        echo "<li>{$item}</li>";
    }
    echo "</ul>";
}

/**
 * Outputs an HTML ordered list (ol) element from an array.
 *
 * @param $items the array of items that will form the list's items (li)
 */
function output_ordered_list( &$items )
{
    echo "<ol>";
    foreach ($items as $item)
    {
        echo "<li>{$item}</li>";
    }
    echo "</ol>";
}
?>


s