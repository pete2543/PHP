function yayOrNay(){
    return new Promise((resolve,reject)=>{
        const val = Math.round(Math.random()*1);
        //0 or 1 ,at random
       val ? resolve("Lucky!!"):reject("Nope LOL");
    });
}

async function msg(){
    try{
        const msg = await yayOrNay();
        console.log(msg);
    }catch(err){
        console.log(err);
    }
}
msg();//Lucky 
msg();//Lucky 
msg();//Lucky 
msg();//Lucky 
msg();//Nope LOL
msg();//Lucky 
msg();//Nope LOL
msg();//Nope LOL