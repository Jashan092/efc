console.log("Script added successfully");
const dragzone = document.getElementById('dragzone');
const fileinput = document.getElementById('fileinput')
const browsebutton = document.querySelector('.browse-button')
const host = 'https://inshare.herokuapp.com/'
const uploadURL =  `${host}api/files`


dragzone.addEventListener('dragover',(e)=>{
    e.preventDefault();
    console.log("Dragging");
    if (!dragzone.classList.contains('dragged')){
        dragzone.classList.add("dragged")
    }
});

dragzone.addEventListener('dragleave',()=>{
    dragzone.classList.remove('dragged')
})
dragzone.addEventListener('drop',(e)=>{
    dragzone.classList.remove('dragged')
    console.log("dropped")
    console.log(e)
    console.log(e.dataTransfer.files.length )
    const files =  fileinput.files;
    console.log(files)
    
})

browsebutton.addEventListener('click',()=>
    fileinput.click()
)
const uploadfile = ()=>{

    const file = fileinput.files[0]
    const formData = new formData()
    formData.append("myfile",file)
    const xhr = new XMLHttpRequest()
    xhr.onreadystatechange = () => {
        console.log(xhr.readyState)
    }
    xhr.open('POST',uploadURL, true)
    xhr.send(formData)
}