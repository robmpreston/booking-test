Date.prototype.sameDay = function(d) {
  return this.getFullYear() === d.getFullYear()
    && this.getDate() === d.getDate()
    && this.getMonth() === d.getMonth();
}

Date.prototype.addDays = function(days){
    var ms = new Date().getTime() + (86400000 * days);
    var added = new Date(ms);
    return added;
}
