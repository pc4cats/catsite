<html>
<!-- This "Form" let me controle elements using "PHP" -->
<form method="Post" enctype="multipart/form-data">

    <head>
        <title>It's All about Cats</title>
        <link rel="stylesheet" href="index1.css">
    </head>

    <body>
<!-- These are the line on the top of the Site codes -->
        <div id="toplinediv" class="unselectable">
            <ul id="toplinelist">
                    <li><a class="links" href="#policy">  سياسة الخصوصية </a></li>
                    <li><a class="links" href="#Us">من نحن ؟ </a></li>
                    <li><a class="links" href="#Contact">  تواصل معنا</a></li>
            </ul>
        </div>

<!-- These are the Logo & Title codes -->
        <div id="logotitlediv" class="unselectable">
            <div id="logosubdiv">
                <a href=""><img src="used\cat1.png" width="70PX" height="70px"></a>
            </div>   
            <div id="titlesubdiv">
                <a href="" style="text-decoration: none;"><h1>CATSITE</h1></a>
            </div>
        </div>

<!-- These are the Menu codes -->
        <div id="Menudiv" class="unselectable">
            <ul id="menulist">
                <li><a class="links" href="#Store"> تسوق </a></li>
                <li><a class="links" href="#Pictures"> صور </a></li>
                <li><a class="links" href="#Info">  معلومات </a></li>&nbsp&nbsp&nbsp&nbsp&nbsp
                <li><a class="links" href=""> | الصفحة الرئيسية </a></li>
            </ul>
            <p id="menupara">
                <marquee behavior="scroll" direction="right" scrollamount=5 onmouseover="this.stop()" onmouseleave="this.start()">
                    <a class="links" href="#Subject0">رابط موضوع </a>
                    <a class="links" href="#Subject1">1 رابط موضوع </a>
                    <a class="links" href="#Subject2">2 رابط موضوع </a>
                    <a class="links" href="#Subject3">3 رابط موضوع </a>
                    <a class="links" href="#Subject4">4 رابط موضوع </a>
                </marquee>
            </p>
        </div>

<!-- These are the Main Page & Sidebar codes -->
        <div id="mainsidediv">
            <!-- These are the Main Page Codes -->
            <div id="maindiv">
                <table id="maintable">
                    <tr>
                        <td>
                            <a href="#"><img src="used\1.jpg" class=maintableimg></a>
                        </td>
                        <td>
                            <a href="##"><img src="used\2.jpg" class=maintableimg></a>
                        </td>
                        <td>
                            <a href="###"><img src="used\3.jpg" class=maintableimg></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#" class="maintablelink"><h2>The Cat's Meow</h2></a>
                        </td>
                        <td>
                            <a href="##" class="maintablelink"><h2>Crossing the Bridge</h2></a>
                        </td>
                        <td>
                            <a href="###" class="maintablelink"><h2>Other Pets & Animals</h2></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p class="maintablepara">Talk about cats... or as cats! This is the only forum where catspeak is allowed and encouraged. Describe the world from a cat's purrspective...</p>
                        </td>
                        <td>
                        <p class="maintablepara">Come here to share memories of fur friends that have crossed the rainbow bridge. Tell us about your lost loved ones and help others deal with...</p>
                        </td>
                        <td>
                        <p class="maintablepara">Do you have other pets besides cats and would like to post a picture or tell a story about them? Perhaps there is wildlife in your area that...</p>
                        </td>
                    </tr>
                </table>
                <br><br><br>
                <table id="maintable">
                    <tr>
                        <td>
                            <a href="#"><img src="used\5.jpg" class="maintableimg"></a>
                        </td>
                        <td>
                            <a href="##"><img src="used\6.jpg" class="maintableimg"></a>
                        </td>
                        <td>
                            <a href="###"><img src="used\7.jpg" class="maintableimg"></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#" class="maintablelink"><h2>The Cat's Meow</h2></a>
                        </td>
                        <td>
                            <a href="##" class="maintablelink"><h2>Crossing the Bridge</h2></a>
                        </td>
                        <td>
                            <a href="###" class="maintablelink"><h2>Other Pets & Animals</h2></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="maintablepara">Talk about cats... or as cats! This is the only forum where catspeak is allowed and encouraged. Describe the world from a cat's purrspective...</p>
                        </td>
                        <td>
                        <p class="maintablepara">Come here to share memories of fur friends that have crossed the rainbow bridge. Tell us about your lost loved ones and help others deal with...</p>
                        </td>
                        <td>
                        <p class="maintablepara">Do you have other pets besides cats and would like to post a picture or tell a story about them? Perhaps there is wildlife in your area that...</p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- These are the Sidebar codes -->
            <div id="sidediv">
                <a href="#" class="links">
                <div id="SSdiv">
                    <h3> موضوع مميز</h3>
                    <img src="used\kitty.png" class="SSimg">
                    <p> The Cat Logo</p>
                </div>
                </a>
                <div id="ad3div"> 
                    <h3>تابعنا على مواقع التواصل الإجتماعي</h3>
                    <a href="#"><img src="used\kitty.png" id="adimg"></a>
                    <a href="#"><img src="used\kitty.png" id="adimg"></a>
                    <a href="#"><img src="used\kitty.png" id="adimg"></a>
                </div>
                <div>
                    <h3>: أرسل لنا صورة أو ملف</h3>
                    <input type="file" id="phpfile" name="file1">
                    <br><br>
                    <button type="submit" id="phpfilebut" name="upload1">إرسال</button>
                    <br><br>
                </div>
                <!-- These are PHP CODES to get uploaded files -->
               <?php
                    if(isset($_POST['upload1']))
                    {
                        $name1 = $_FILES['file1']['name']; //تأخد الإسم //takes the file name
                        $Path1 = $_FILES['file1']['tmp_name']; //تأخذ مسار الملف //takes the file path

                        // Move_uploaded_file($_FILES['file1']['tmp_name'],$_FILES['file1']['name']);
                        move_uploaded_file($_FILES['file1']['tmp_name'],'FolderA/'.$_FILES['file1']['name']);
                        if ($name1=='')
                        { echo 'Please Select a file!'; }
                        else
                        {
                            echo ' THE FILE : |';
                            echo $name1;
                            echo '| WAS SENT SECCUFULY ! ';
                        }
                    }
                ?>
            </div> 
        </div>
    </body>

<!-- It's just the last line -->
    <footer id="footer">
        <h5 style="padding-left:10px">© 2023</h5>
    </footer>
</form>
</html>
