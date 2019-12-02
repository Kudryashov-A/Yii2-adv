let websocketPort = wsPort ? wsPort : 8080,
    conn = new WebSocket('ws://localhost:' + websocketPort),
    idMessage = 'chatMessages';

conn.onopen = function (e) {

    console.log("Connection established!");
};
conn.onerror = function (e) {

    console.log("Connection fail!");
};
conn.onmessage = function (e) {

    document.getElementById(idMessage).value = e.data +
            '\n' + document.getElementById(idMessage).value;
    let $el = $('li.messages-menu ul.menu li:first').clone();

    if (document.getElementById("liFirst")) {
        $el[0].removeAttribute('id');
        document.getElementById("liFirst").remove();
    }
    $el.find('p').text(e.data);

    $el.find('h4').text('Websocket user');
    $el.prependTo('li.messages-menu ul.menu');
    let cnt = $('li.messages-menu ul.menu li').length;
    $('li.messages-menu span.label-success').text(cnt);
    $('li.messages-menu li.header').text('You have ' + cnt + ' messages');
};
document.getElementById("chatButton").onclick = function() {
    conn.send(document.getElementById('chatInput').value);
}
