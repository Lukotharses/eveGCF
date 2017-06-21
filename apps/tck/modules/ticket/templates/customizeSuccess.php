<?php
use_stylesheet('/css/customize/bootstrap-mod.min.css');
//use_javascript('/js/customize/bootstrap.min.js');
use_javascript('/js/customize/interact.js');
use_javascript('/js/customize/fabric.min.js');
use_javascript('/js/customize/w3.js');
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

                        <form class="form-inline">
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
                                    //TODO ? put style in css
                                    echo $tckForm[$key]->renderRow(array('class' => "form-control input-sm"))
                                    . $tckForm[$key . '.font']->render(array('class' => "form-control input-sm", 'style' => 'width: 100px; float: right;'))
                                    . $tckForm[$key . '.size']->render(array('class' => "form-control input-sm", 'style' => 'float: right;'))
                                    ;
                                    echo '</li>';
                                }
                                ?>
                                </div>
                                <li class="list-group-item"><input type="submit" /></li>
                            </ul>
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

                        <! TODO style in CSS !>
                        <div id="div1" style="width: 600px; height: 400px; padding: 10px; border: 1px solid black;">
                            <div id="drag-1" class="draggable">
                                <p> You can drag one element </p>
                            </div>
                            <div id="drag-2" class="draggable" style="width: 100px;">
                                <p> with each pointer </p>
                            </div>

                        </div>
                        <br>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <! Please erase when done >
    <div id="testing">

    </div>






    <script>
        

// target elements with the "draggable" class
interact('.draggable')
  .draggable({
    // enable inertial throwing
    inertia: true,
    // keep the element within the area of it's parent
    restrict: {
      restriction: "parent",
      endOnly: true,
      elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
    },
    // enable autoScroll
    autoScroll: true,

    // call this function on every dragmove event
    onmove: dragMoveListener,
    // call this function on every dragend event
    onend: function (event) {
      var textEl = event.target.querySelector('p');

      textEl && (textEl.textContent =
        'moved a distance of '
        + (Math.sqrt(event.dx * event.dx +
                     event.dy * event.dy)|0) + 'px');
    }
  });

  function dragMoveListener (event) {
    var target = event.target,
        // keep the dragged position in the data-x/data-y attributes
        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    // translate the element
    target.style.webkitTransform =
    target.style.transform =
      'translate(' + x + 'px, ' + y + 'px)';

    // update the posiion attributes
    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
  }

  // this is used later in the resizing and gesture demos
  window.dragMoveListener = dragMoveListener;


    </script>
