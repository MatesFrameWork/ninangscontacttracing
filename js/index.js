$( "#temperature" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(1);
});
