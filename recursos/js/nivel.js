var select = document.getElementById('niv'),
onChange = function(event) {
    
  var shown = this.options[this.selectedIndex].value == 1;
  document.getElementById('gp').style.display = shown ? 'block' : 'none';
  
  var shown2 = this.options[this.selectedIndex].value == 2;
  document.getElementById('gs').style.display = shown2 ? 'block' : 'none';

};




if (select.addEventListener) {
    select.addEventListener('change', onChange, false);
} else {
  select.attachEvent('onchange', function() {
    onChange.apply(select, arguments);
  });
}


