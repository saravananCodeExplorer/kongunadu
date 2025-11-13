        //1.isArray

         let arr = [1,2,3]
          let notarr ="[]";
          document.write("isArray: "+Array.isArray(arr) + "<br>");
          document.write("isArray: "+Array.isArray(notarr) + "<br>");

        //2.cancat
        // const array1 = ['a', 'b', 'c'];
        //  const array2 = ['d', 'e', 'f'];
        // // const array3 = array1.concat(array2);
        // console.log(array1)
        // console.log(array1.concat(array2))
        // console.log(array2)
       
        // console.log(array3)     

        //3.length
        // const ch = ['a','b','c','d']
       
    //     console.log("Length :"+ch.length)
    //        console.log(ch)

    // //     // 4.push()
    //        ch.push('e')
    //        console.log(ch)
    // // //     //5.pop()
    //     console.log(ch)
    //     console.log(ch.pop())
    //     console.log(ch)

       //6.shift()
    //    let arr = [1,2,3,4,5]
    // console.log(arr.shift())
    //    console.log(arr)

    //7.unshift()

    //    let arr=['a','b','c','d']
    //    arr.unshift("A")
    //    console.log(arr)

    //8.splice

    // const day = ['sun', 'mon', 'tues', 'thurs'];
    //  day.splice(3,1, 'fun');
    //  day.splice(2,2, 'dan')
    
    //  console.log(day)
    //  day.splice(0,0,"fun")
    //  console.log(day)

//     const n1=[1,2,3,4,5,6,7,8,9,10];

// console.log("Before Splice : "+n1);
// let removed_elements=n1.splice(2);
// console.log("Removed Items : "+removed_elements);
// console.log("After Splice :"+n1);   
// console.log(n1.splice(2))
    
// const months = ['Jan', 'March', 'April', 'June'];
// months.splice(1, 0, 'Feb');
// console.log(months);
// months.splice(2, 1, 'May');
// console.log(months);


//9.slice()

// let arr = ['a','b','c','d','e']
//  let arr2=arr.slice(2,4)
// let arr2=arr.slice(-4,-1) 
// let arr2 =arr.slice(3)
//  console.log(arr)
// console.log(arr2)

//10.flat()'
// let num =[[1,2],[3,4],[5,6],["7,8"]]
// console.log(num.flat())

// 11.copyWithin()
//syntax
// copyWithin(target, start,end)


// const array1 = ['a', 'b', 'c', 'd', 'e'];
// console.log(array1.copyWithin(0,3,4))
// console.log(array1.copyWithin(1,4));

// 12.every()

// const isFunc = (currentValue) => currentValue < 4;

// const array1 = [11,21,3];

// console.log(array1.some(isFunc));

//13.fill()
// const array1 = [11, 22, 33, 44,55,66,77,88];
// console.log(array1)
// console.log(array1.fill(10, 2,6));
// console.log(array1.fill(5, 1));
// console.log(array1.fill(6));


//14.filter()
// const names = ['saro', 'gowtham', 'harish', 'yogu', 'rajesh'];

// const result = names.filter((word) => word.length <6);

// console.log(result);
// console.log(names)

// const num = [10,11,12,13,14,15,16,17,18,19,20];

// const store = num.filter((value)=>value%2!=0)

// console.log(store);
// const num2 = [10,11,12,13,14,15,16,17,18,19,20];

// const stores = num2.filter((values)=>values%2==0)

// console.log(stores);

//15.find()

// const array1 = [5, 12, 8, 130, 44];

// const found = array1.find((element) => element > 10);

// console.log(found);

//16.findlast
// const array1 = [51, 12, 50, 130, 44];

// const found = array1.findLast((element) => element > 45);

// console.log(found);

// 16.findIndex

// const array1 = [55, 15, 8, 130, 44];

// const isLargeNumber = (element) => element < 13;

// console.log(array1.findIndex(isLargeNumber));

//17.findlastindex
// const array1 = [55, 15, 8, 130, 44];
// const isLargeNumber = (element) => element > 45;

// console.log(array1.findLastIndex(isLargeNumber));

// 18.flatmap()
// const arr1 = [1, 2, 3,4,5,6,7,8,9];

// const result = arr1.flatMap((num) => (num === 2 ? [2,2] : 1));

// console.log(result);


//19.forEach()
// const array1 = [1,2,3,4,5,6,7,8,9]
// const array2 = ['a', 'b', 'c'];

// // array1.forEach((element) => console.log(element));

// array2.forEach((element) => console.log(element));   

//20 includes()
// const array1 = [1, 2, 3];
// console.log(array1.includes(2));

// const pets = ['cat', 'dog', 'bat'];
// console.log(pets.includes('cat'));
// console.log(pets.includes('at'));

//21.index()

// const ch = ['a','b','c','d'];
// console.log(ch.indexOf('c'));

// //22.LastIndexOf()
// const animals = ['Dodo', 'Tiger', 'Penguin', 'Dodo'];
// console.log(animals.lastIndexOf('Dodo'));
// console.log(animals.lastIndexOf('Tiger'));

//23.jion()
// const elements = ['Fire', 'Air', 'Water'];
// console.log(elements)

// console.log(elements.join());
// console.log(elements.join('  '));
// console.log(elements.join(' @ '));
// console.log(typeof(elements.join()))

//24.map()
// const array1 = [1, 4, 9, 16];
// const map1 = array1.map((x) => x * 2);
// console.log(map1);
// console.log(array1)

//25.reverse()
// const array1 = ['one', 'two', 'three'];
// console.log('array1:', array1);
// const reversed = array1.reverse();
// console.log('reversed:', reversed);
// console.log('array1:', array1);

//26.some()
// const array = [1, 1, 3, 4, 5];

// const even = (element) => element % 2 === 0;

// console.log(array.some(even));

//27.toReversed()
// const items = [1, 2, 3];
// console.log(items); 

// const reversedItems = items.toReversed();
// console.log(reversedItems); 
// console.log(items); 

// 28.with()
//  const arr = [1, 2, 3, 4, 5];
//  console.log(arr.with(2,100));
//  console.log(arr);

//29.value()
//  const ar = ['a', 'b', 'c'];
// const storeitems = ar.values();

// for (const value of storeitems) { 
//   console.log(value);
// }

// 30.toString()
//  const a = [1, 2, 3,4,5];

// let d = a.toString()
// console.log(typeof(d))
// console.log(d)


// 31.reduce
// const numbers = [1, 2, 3, 4, 5];

// const sum = numbers.reduce((accumulator, currentValue) => {
//   return accumulator + currentValue;
// }, 0); // 0 is the initial value for accumulator

// console.log(sum); 




// spread
    let array1 = [10, 20, 30, 40, 50];
    let array2 = [60, 70, 80, 90, 100];
    let array3 = [...array1, ...array2];
   console.log(array3);

  //  rest
  
    // function average(...args) {
    //     console.log(args);
    //     let avg =
    //         args.reduce(function (a, b) {
    //             return a + b;
    //        }, 0) / args.length;
    //     return avg;
    // }
    // console.log("average of numbers is : "
    //     + average(1, 2, 3, 4, 5 ));
    // console.log("average of numbers is : "
    //     + average(1, 2, 3));


