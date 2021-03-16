function promiseTimeout(ns){
    return new Promise((resolve,reject)=>{
        setTimeout(resolve,ns);
    });
}

async function longRunningOperation(){
    //logic
    return 42;}
async function run(){
    //logic
    console.log("Start!!");
    await promiseTimeout(2000);
    //try take of await and see
    const response = await longRunningOperation();
    console.log(response);

    console.log("Stop!!")
}
run();