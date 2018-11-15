function enableWager(obj) {
    var icon = obj.options[obj.selectedIndex].getAttribute('data-icon');
    $("#selectedAvatar").attr('src' , icon);
}