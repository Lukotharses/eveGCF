<?php
use_stylesheet('/css/customize/bootstrap-mod.min.css');
use_javascript('/js/customize/bootstrap.min.js');
use_javascript('/js/customize/interact.js');
use_javascript('/js/customize/fabric.min.js');
use_javascript('/js/customize/w3.js');
use_javascript('/js/customize/customFunc.js');
use_javascript('/js/customize/handlebars-v4.0.10.js');
//use_javascript('/js/customize/jquery-1.11.2.js');

//for testing
use_javascript('/js/customize/tThandled.js');
?>

<div class="bootstrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div id="menu-tkt" class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title" title="title-menu-tkt">Modification du billet</h2>
                    </div>
                    <div class="panel-body">

  <table>
    <?php
        echo $tckForm;
//    var_dump(gettype($param));
//    $count = 0;
//    $notOpt = 0;
//    $optDispl = 0;
//    $optNotDispl = 0;    
//    foreach($param as $key => $value){
//        $count++;
//        $str = '<tr><td>'.$key.'</td><td><input type="checkbox" id="'.$key.'" checked=';
//        if($value['optional']&&$value['displayed']){
//            $str.=false;
//            $optDispl++;
//        }else if (! $value['optional']){
//            $str.='true disabled';
//            $notOpt++;
//        }else{
//            $optNotDispl++;
//            continue;
//            
//        }
//        $str.=' /></td></tr>';
//        echo $str;
//    }
//    var_dump($count, $notOpt, $optDispl, $optNotDispl);
    
    ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
</form>
                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div id="preview-tkt" class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title" title="title-preview-tkt">Prévisualisation</h2>

                    </div>
                    <div class="panel-body">
                        <canvas id="tktCanvas" style="border:1px solid #000000;" width="400" height="300">
                            Please update your browser.
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div id="testing">
        
        
    </div>
    

    <script>
        var canvas = new fabric.Canvas('tktCanvas');

        fabric.Image.fromURL('/images/breizhoneg.png', function (oImg) {
            // scale image down, and flip it, before adding it onto canvas
            oImg.scale(0.5).setFlipX(true);
            canvas.add(oImg);
            });
            
        var text = new fabric.Text('hello world', { left: 100, top: 100 });
        canvas.add(text);
    </script>
    
    <script>
        
    </script>
    
    <script>
      //Handlebars.templates['templateTicket.html']
    //var source   = $("#entry-template").html();
    //var template = Handlebars.compile(source);

//    var request = new XMLHttpRequest();
//    request.open('GET', 'http://127.0.0.1/tck.php/ticket/14586/print?direct&json', false);
//    request.onload = function () {
//            var tickets = JSON.parse(this.response);
//            var key;
//            var ticket = tickets[0];
//
//            //html    = template(ticket);
//            html = Handlebars.templates['templateTicket.html'](ticket);
//            console.log('HTML '+ html);
//        };
//
//    request.send();
//    console.log('HTMLOUT'+ html);
//    document.getElementById("testing").innerHTML = html;
    </script>
    