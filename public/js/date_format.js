
function toMonthName(monthNumber) {
  const date = new Date();
  date.setMonth(monthNumber - 1);

  return date.toLocaleString('en-US', {
    month: 'long',
  });
}
function formatDate(date) {
     var d = new Date(date),
         month = '' + (d.getMonth() + 1),
         day = '' + d.getDate(),
         year = d.getFullYear();
         let hours = d.getHours();
         let minutes = d.getMinutes();    
         const ampm = hours >= 12 ? 'pm' : 'am';

         hours %= 12;
         hours = hours || 12;    
         minutes = minutes < 10 ? `0${minutes}` : minutes;

         const strTime = `${hours}:${minutes} ${ampm}`;

     if (month.length < 2) month = '0' + month;
     if (day.length < 2) day = '0' + day;
     return toMonthName(month)+" "+day.toString()+", "+year.toString()+" "+strTime;
}