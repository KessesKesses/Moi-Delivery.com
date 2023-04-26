const  Name =document.getElementsByid("Name")
const  Location =document.getElementsByid("Location")
const  Email =document.getElementsByid("email")
const form= document.getformbyid("form")
const errorElement=document.getElementById("error")

form.addEventListener("submit",(e)=>{
    let message=[]
    if (Name.value===''||Name.value==null){
        message.push('Name  is required')
    }
    if(message.length>0){
        e.preventdefault()
        errorElement.innerText=message.join(',')
    }
})



