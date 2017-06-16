/* 
 *  parsing a JSON file to its list of keys
 *  @param
 *      json - the file
 *      prefix - first word of all keys
 *      keyList - string I/O
 *  @returns string keyList
 */


function parseJSON2Keys(json, prefix, keyList) {
    for (key in json) {
        if (typeof (json[key]) === "object") {
            keyList = parseJSON2Keys(json[key], prefix + key + '.', keyList);
        } else {
            keyList += '<p class="' + prefix + key + '">' + '{{' + prefix + key + '}}' + '</p>' + '\r\n';
        }
        ;
    }
    ;
    return keyList;
}
;

/**
 * get one ticket and parse it into a html template
 * !!! NOT FOR PROD !!!
 * @returns {undefined}
 */

function getOneTicketSampleForTemplate() {
    var request = new XMLHttpRequest();

    request.open('GET', 'http://127.0.0.1/tck.php/ticket/14586/print?direct&json', true);

    request.onload = function () {
        var tickets = JSON.parse(this.response);
        var key;
        var ticket = tickets[0];
        var keyList = '<div class="page"><div class="ticket"><div class="logo">{{logo}}</div>';


        var keySide = parseJSON2Keys(ticket, '', '');
        keyList += '<div class="left">' + keySide + '</div>';
        keyList += '<div class="right">' + keySide + '</div>';
        keyList += '</div>';

        document.getElementById("myTicket").innerHTML = keyList;
    };

    request.send();
}