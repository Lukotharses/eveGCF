<?php
use_stylesheet('/css/customize/bootstrap-mod.min.css');
use_javascript('/js/customize/bootstrap.min.js');
use_javascript('/js/customize/interact.js');
use_javascript('/js/customize/fabric.min.js');
//use_javascript('/js/customize/w3.js');
use_javascript('/js/customize/customFunc.js');
use_javascript('/js/customize/handlebars-v4.0.10.js');
use_javascript('/js/customize/jquery-1.11.2.js');
use_stylesheet('/css/customize/customize.css');
?>
<?php use_helper('I18N') ?>
<div class="bootstrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div id="menu-tkt" class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title" title="title-menu-tkt">Modification du billet</h2>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <h4>Elements imposés</h4>
                            <?php
                            $breaker = true;
                            foreach ($param as $key => $value) {
                                if ($breaker && $value['optional']) {
                                    echo '<hr><h4>Elements optionnels </h4>';
                                    echo '<div class="scrolled">';
                                    $breaker = false;
                                }
                                echo '<li class="list-group-item">';
                                echo '<form class="form-inline">';
                                echo '<div class="row">';
                                //TODO ? put style in css
                                //$hasSuccess = ($value['optional'])?'':'has-success'; // in jquery
                                echo '<div class="input-group col-md-5">';
                                echo '<input type="text" class="form-control" title="' . $key . '" name="' . $key . '"  value="' . $key . '" disabled>';
                                echo ' <span class="input-group-addon">';
                                // not a option ?
                                if (!$value['optional']) {
                                    echo '<input class ="addLabelBox" type="checkbox" id="' . $key . '" checked disabled>';
                                    // optional but to display ?
                                } else if ($value['displayed']) {
                                    echo '<input class ="addLabelBox" type="checkbox" id="' . $key . '">';
                                    // throw away the rest
                                } else
                                    continue;
                                //go on with the options
                                //echo '</span>';
                                echo '</span>';
                                echo '</div>';
                                echo '<select id="' . $key . '.font" class="form-control fontSelection" title="Please choose a font" disabled>';
                                foreach ($font as $k => $v) {
                                    echo '<option value="' . $k . '">' . $v . '</option>';
                                }
                                echo '</select>';
                                echo '<select id="' . $key . '.size" class="form-control sizeSelection" title="Please choose a font size" disabled>';
                                foreach ($size as $k => $v) {
                                    echo '<option value="' . $k . '">' . $v . '</option>';
                                }
                                echo '</select>';
                                echo '</div>';

                                //echo '</div>';
                                echo '</form>';
                                echo '</li>';
                            }
                            echo '</ul>';
                            ?>
                            <li class="list-group-item"><input type="submit" /></li>
                        </ul>
                    </div>

                </div>

            </div>


            <div class="col-md-8">
                <div id="preview-tkt" class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title" title="title-preview-tkt">Prévisualisation</h2>

                    </div>
                    <div class="panel-body">
                        <!--                        <div class="col-md-6">-->

                        <div class="editor">
                            <canvas id="tktCanvas">
                                Please wait for loading.
                                If nothing happens, kindly update your browser.
                            </canvas>
                            <button class="btn btn-success" id="serializer" type="button">serializer</button>
                            <button class="btn btn-success" id="resizer" type="button">resizer</button>
                        </div>
                    </div>

                    <!--                        </div>-->
                    <!--                        <div class="col-md-6">-->
                    <div class="panel-footer">For debug only
                        <div id="section-to-print">
                            <canvas id="rebuildCanvas" style="border:1px solid #000000;" width="400" height="300">
                                come again !
                            </canvas>
                        </div>
                        <button class="btn btn-success" id="reSerializer" type="button" disabled>rebuild</button>
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <! Please erase when done >
    <div id="testing">

    </div>






    <script>
        
        
        var canvas = new fabric.Canvas('tktCanvas');
        //canvas.setWidth("150mm", {'cssOnly': true});
        //canvas.setHeight("50mm", {'cssOnly': true});
        //canvas.renderAll();
        canvas.setWidth("900");
        canvas.setHeight("300");
        //canvas.setWidth( "<desired width>" );
        //canvas.setHeight( <desired height> );
        //canvas.calcOffset();
//        var styleCanvas = document.getElementsByTagName('canvas')[0];
//        styleCanvas.style.width  = '900px';
//        styleCanvas.style.height = '300px';
        var rect = new fabric.Rect({
        left: 100,
        top: 100,
        fill: 'red',
        width: 100,
        height: 100
      });
    canvas.add(rect);

        
        var objectOnCanvas = [];
        var rebuildCanvas = new fabric.StaticCanvas('rebuildCanvas');
        //image adding example
        //        fabric.Image.fromURL('/images/breizhoneg.png', function (oImg) {
        //               //scale image down, and flip it, before adding it onto canvas
        //               oImg.scale(0.5).setFlipX(true);
        //               canvas.add(oImg);
        //             });
        //        
        // create class for the text elements
        var TckLabel = fabric.util.createClass(fabric.Text, {
            initialize: function (text2Display, options) {
                this.callSuper('initialize', text2Display, options);
                options && this.set('name', options.name);
                this.set('hasControls', false);
                this.set('hasRotatingPoint', false);
                this.set('lockRotation', true);
            },
            toObject: function () {
                return fabric.util.object.extend(this.callSuper('toObject'), {name: this.name});
            }
        });



        // text adding examples
        //         var text = new fabric.Text('hello world', { fontSize: 14, left: 100, top: 100 });
        //         text.lockScalingX = true;
        //         text.lockScalingY = true;
        //         text.hasControls = false;

        // add parameter to object/JSON
        //         text.toObject = (function(toObject) {
        //                return function() {
        //                    return fabric.util.object.extend(toObject.call(this), {
        //                        name: this.name
        //                        });
        //                    };
        //                })(text.toObject);
        //         text.name = "trololilol";


        // text adding examples
        //         var text = new TckLabel("youhou !!!", { fontSize: 14, left: 100, top: 100, name: "UN_VACH_te_DE_SUPER_NOM" });
        //         canvas.add(text);
        //         var text2 = new fabric.Text('hello two', { left: 100, top: 100 });
        //         canvas.add(text2);

        //function to prevent object moving out of the canvas 
        canvas.on('object:moving', function (e) {
            var obj = e.target;
            // if object is too big ignore
            if (obj.currentHeight > obj.canvas.height || obj.currentWidth > obj.canvas.width) {
                return;
            }
            obj.setCoords();
            // top-left  corner
            if (obj.getBoundingRect().top < 0 || obj.getBoundingRect().left < 0) {
                obj.top = Math.max(obj.top, obj.top - obj.getBoundingRect().top);
                obj.left = Math.max(obj.left, obj.left - obj.getBoundingRect().left);
            }
            // bot-right corner
            if (obj.getBoundingRect().top + obj.getBoundingRect().height > obj.canvas.height || obj.getBoundingRect().left + obj.getBoundingRect().width > obj.canvas.width) {
                obj.top = Math.min(obj.top, obj.canvas.height - obj.getBoundingRect().height + obj.top - obj.getBoundingRect().top);
                obj.left = Math.min(obj.left, obj.canvas.width - obj.getBoundingRect().width + obj.left - obj.getBoundingRect().left);
            }
        });

        // prepare the ticket
        var myTck;
        document.getElementById("serializer").onclick = function () {
            myTck = JSON.stringify(canvas);
            console.log(myTck);
            console.log(canvas.toSVG());
            document.getElementById("reSerializer").disabled = false;
            
        };


        document.getElementById("reSerializer").onclick = function () {
            rebuildCanvas.loadFromJSON(myTck, function () {
                rebuildCanvas.renderAll();
            },
                    function (o, object) {
                        console.log(o + ' ' + object);
                    }
            );
        };

        
        //for test ! Size changer

        document.getElementById("resizer").onclick = function () {
            var sizWidth = canvas.getWidth();
            var sizHeight = canvas.getHeight();
            var zoom = 1
            if (sizWidth*1.5<1000){
                zoom = 1.5;
            }else{
                zoom = 0.75;
            }
            var styleCanvas = document.getElementsByTagName('canvas')[0];
            //styleCanvas.style.width = sizWidth +'px';
            //styleCanvas.style.height = sizHeight +'px';
            canvas.setWidth(sizWidth*zoom);
            canvas.setHeight(sizHeight*zoom);
            canvas.setZoom(zoom);
            canvas.getContext();
            canvas.renderAll();
        };
        
        function getNameFromOption(target) {
            var name = target.attr("id");
            var index = name.lastIndexOf(".");
            name = name.substring(0, index);
            return name;
        }

        function changeFont(target) {
            var name = getNameFromOption(target);
            var myObj = canvas.getObjects();
            var index = myObj.findIndex(obj => (obj.name === name));
            console.log(myObj[index]);
            myObj[index].fontFamily = target.val();
            canvas.renderAll();
            //canvas.trigger('object:moving', {target: myObj[index]});
        }

        function changeFontSize(target) {
            var name = getNameFromOption(target);
            var myObj = canvas.getObjects();
            var index = myObj.findIndex(obj => (obj.name === name));
            myObj[index].fontSize = target.val();
            canvas.renderAll();
            canvas.setActiveObject(canvas.item(index));
        }

        // put the css-tag and activate the options for the selected label
        function changeState(target)
        {
            var checkedClass = "has-success";
            target.closest("div").toggleClass(checkedClass);
            $('[id="' + target.attr("id") + '.font"]').prop("disabled", function (_, val) {
                return !val;
            });
            $('[id="' + target.attr("id") + '.size"]').prop("disabled", function (_, val) {
                return !val;
            });
        }


        function addText2Canvas(target)
        {
            var targetLabel = target.parent().prev().attr("value");
            var targetName = target.parent().prev().attr("name");
            var targetFontType = $('[id="' + target.attr("id") + '.font"]').val();
            var targetFontSize = $('[id="' + target.attr("id") + '.size"]').val();
            var lefty = fabric.util.getRandomInt(0, canvas.width);
            var topty = fabric.util.getRandomInt(0, canvas.height);
            var text2add = new TckLabel(targetLabel, {fontFamily: targetFontType, fontSize: targetFontSize, left: lefty, top: topty, name: targetName});
            canvas.add(text2add);
        }

        function checkedEvent() {
            $('.addLabelBox:checked').each(function () {
                changeState($(this));
                addText2Canvas($(this));
            });
            $('.addLabelBox').bind('click', function () {
                changeState($(this));
                addText2Canvas($(this));
            });
        }

        $(document).on("load", checkedEvent());
        $('.fontSelection').change(function () {
            changeFont($(this));
        });
        $('.sizeSelection').change(function () {
            changeFontSize($(this));
        });


    </script>
