        // // 1. string length

        // let str = "welcome to string"
        // let str2 ="123456789"
        // console.log(str)
        // console.log(str.length)
        // console.log(str2.length)

        // // uppercase or lowercase or charAt
        
        // console.log(str.toUpperCase())
        // console.log(str.toLowerCase())
        console.log(str.charAt(5))

        // // compare string
        //  2.Template Literals

                // Template literals allow embedding expression inside strings,
                // providing a cleaner and more readable way to concatenate strings.

                // let a = "hai buddy"
                // console.log("the a value is" ,a)
                // console.log(`the a value is ${a}`)

        // const a = "a";
        // const b = "h";
        // if (a > b) {
        
        //   console.log(`${a} lessthan ${b}`);
        // // console.log(`${a} is less than ${b}`)
        // } else if (a > b) {
        //   console.log(`${a} is greater than ${b}`);
        // } else {
        //   console.log(`${a} and ${b} are equal.`);
        // }



        // slice & substr & substring

        // let val = "12345678910"
        // console.log(val)
        // console.log( "slice: " +val.slice(3,7))
        // console.log( "substr: " +val.substr(2,5))  //index,length
        // console.log("substring :"+val.substring(3,7))

        // // replace & replaceAll
        // let c ="saravanan"
        // let d = c.replace("a","o")
        // console.log(d)

        // let e = c.replaceAll("a","o")
        // console.log(e)

        // // toString()

        // let arr = [1,2,3,4,]
        // console.log(typeof(arr))
        // console.log(arr)

        //  let str5=arr.toString()
        // console.log(str5)
        // console.log(typeof(str5))

        // // str to number

        // let str7 ="1"
        // console.log(typeof(str7)) 
        //  let x =Number(str7)
        //  console.log(typeof(x))


        // let data ="               collection                     "
        //   console.log(data)
        //   console.log(data.length)
        // // 
        //   console.log("trimStart: "+data.trimStart())

        //    const len1 = data.trimStart()

        //   console.log(len1.length)


        // console.log(data.trimEnd())
        // console.log(data.trim())
        // const v = data.trimStart()
        // const vv = data.trimEnd()
        // console.log(v.length)
        // console.log(vv.length)

        // // concat
        // let num = "saravanan"
        // let num2  = 54
        // let store =num.concat(num2)
        // console.log(store)


        // // padStart and padEnd
        // let pad = "sara"
        // console.log(pad.padStart(10,"@"))

        // console.log(pad.padEnd(7,"#"))


        // // charAt()
        // let xx = "saravanan"
        // console.log(xx.charAt(6))

        //Find AsCII values
        // console.log(String.fromCharCode(98))

        //write index fine ascii value
        let first_name="sysway";
        c=first_name.charCodeAt(3);
        console.log("charCodeAt 1 : "+c);

        // console.log(xx.split(""))
        // console.log("Index of: " + xx.indexOf("s"))
        // console.log("lastindexof :"+ xx.lastIndexOf("a"))
        // console.log("search :" +xx.search("n"))

        // // match()
        // let st = "Hai frinds I am saravanan.";
        // let reslt = st.match(/[a-z]/g); 
        // console.log(reslt);  


        // // matchAll()
        // let strng1 = "The quick brown fox jumps over quick quick the lazy dog. The dog is quick.";
        // let strng2 = "quick";
        // let matches = strng1.matchAll(strng2);


        // for (let match of matches) {
        //     document.write(match);

        // console.log(match.length)
        
        // }


        // search()
        // let s = "The quick brown fox jumps over the lazy dog.";
        // let r= s.search(/fox/);   
        // console.log(r);  

        // startsWith
        let strg = "The quick brown fox jumps over the lazy dog.";
        let rslt = strg.startsWith("The");
        console.log(rslt);  

        // endsWith()
        let st1 = "The quick brown fox jumps over the lazy dog.";
        let sto = st1.endsWith("swfwf");
        console.log(sto);  



        // // replace()
        // let restr = "The quick brown fox jumps over the lazy dog.";
        // let newStr = restr.replace('dog', 'cat');  
        // console.log(newStr); 


        // // includes
        let strg1 = "saravanan"
        console.log(strg1.includes("a"))

        // // splict
        let sr = "The quick brown fox jumps over the lazy dog.";
        console.log(typeof(sr))
        let words = sr.split('');  
        console.log(sr);
        console.log(words)
        console.log(typeof(words))

