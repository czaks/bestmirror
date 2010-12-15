<?php
/* Copyright (c) 2010 Marcin Łabanowski
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
require("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Best mirror selection... please wait a moment</title>
        <script type="text/javascript">
            parameters = "<?php echo $_SERVER['REQUEST_URI']; ?>";
            
            mirrors = {
                <?php foreach ($mirrors as $website => $testimage) { ?>
                    "<?php echo $website; ?>":      "<?php echo $testimage; ?>",
		<?php } ?>    
            }
            imgloaded = 0;
            
            window.onload = function() {
                str = "";
                for (i in mirrors) {
                    str += "<img src='"+mirrors[i]+"?lid="+Math.random()+"' alt='' onload='loaded(\""+i+
			"\")' style='width:1px;height:1px;'>";
                }
                document.getElementById("container").innerHTML = str;
            }
            
            function loaded(site) {
                if (!imgloaded) {
                    document.location.replace(site+parameters);
                    imgloaded = !imgloaded;
                }
            }
        </script>
	<meta http-equiv='Refresh' content='3;URL=<?php echo $default_mirror.$_SERVER['REQUEST_URI']; ?>'>
    </head>
    <body>
        <div id="container"></div>
    </body>
</html>
