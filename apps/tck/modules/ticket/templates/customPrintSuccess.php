<?php decorate_with(false) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="e-venement, Billet" />
    <title>e-venement, Billet</title>
    <link rel="shortcut icon" href="/images/logo-evenement.png" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/print-tickets.default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/print-tickets.boca.css" />
    
    <link rel="stylesheet" type="text/css" media="all" href="/css/print-tickets.controlleft.css" />
    
    <script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/print-tickets.js"></script>
  
  <body>
    <div id="content">
<?php
    echo get_partial('templateTicket_html',array());
?>
<script>
            function findProp(obj, prop, defval){
                if (typeof defval == 'undefined') defval = null;
                //prop = prop.split('.');
                for (var i = 0; i < prop.length; i++) {
                    if(typeof obj[prop[i]] == 'undefined')
                        return defval;
                    obj = obj[prop[i]];
                }
                return obj;
            }
            var request = new XMLHttpRequest();
            request.open('GET', 'http://127.0.0.1/tck.php/ticket/14586/print?direct&json', false);
            request.onload = function () {
            var tickets = JSON.parse(this.response);
            var key;
            ticket = tickets[0];


            };

            request.send();
            
            
            
            var patt = /{{(.*?)}}/;
            
            var logos = document.getElementsByClassName("logo");
            console.log(logos);
            for (logo in logos){
                console.log(logo);
                logo.innerHTML='MONLOGO';
            }
    
            var attList = (document.getElementsByClassName("ticket")[0]).getElementsByTagName("p");
            
            
            
            for (var i=0; i<attList.length; i++){
                var keys = (patt.exec(attList.item(i).childNodes[0].nodeValue))[1].split('.');
                var valueTkt = findProp(ticket, keys, 'error');
                attList[i].childNodes[0].nodeValue = valueTkt;
                console.log(keys, valueTkt);
            
            }; 
            
            

</script>    