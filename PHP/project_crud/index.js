$(document).ready( function () {
    $('#myTable').DataTable();
} );

console.log("script added")

edits = document.getElementsByClassName('edit');
Array.from(edits).forEach( (element) => {
    console.log('edit button clicked')
    element.addEventListener('click', (e) => {
        console.log(e)
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName('td')[1].innerText;
        message = tr.getElementsByTagName('td')[2].innerText;
        sno = tr.getElementsByTagName('td')[0].innerText;
        console.log('title ' + title + ' message ' + message)
        te = document.getElementById('titleEdit');
        snoEdit = document.getElementById('snoEdit');
        snoEdit.value = sno;
        te.value = title;
        de.value = message;
        console.log(sno);
    } )
} )

deles = document.getElementsByClassName('dele');
Array.from(deles).forEach( (element) => {
    form = document.getElementById('delform');
    console.log('delete button clicked')
    element.addEventListener('click', (e) => {
        tr = e.target.parentNode.parentNode.parentNode;
        sno = tr.getElementsByTagName('td')[0].innerText;        
        dsnumber = document.getElementById('dsnumber')
        dsnumber.value = sno;
        conf = confirm("Are you really want to delete this?") 
        if (conf){
            form.submit();
        }
    } )
} )
