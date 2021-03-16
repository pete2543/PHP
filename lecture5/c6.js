function who(){
    return new Promise((resolve) =>{
        setTimeout(()=>{
            resolve("ToT");
        },200);
    });
}
 
function what(){
    return new Promise((resolve)=> {
        setTimeout(()=> {
            resolve("lerk");
        },300);
    });
}
function where(){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("in the shadows");
        },500);
    });
}

async function msg(){
    const a = await who();
    const b = await what();
    const c = await where();

    console.log(`${a} ${b} ${c}`);
}
console.log('We are looking for :')
msg();//ToT lurk in the shadows <<<1 sec
console.log('Hello')