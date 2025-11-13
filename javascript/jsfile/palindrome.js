function palindrome(text){
    let len = Math.floor(text.length/2),
    right = text.length - 1,
    left = 0
    for(let i = 0; i< len; i++){
        if(text[left] != text[right]) {
         return false
        }
        left++
        right--
        return true
    }
}
palindrome();
function fun(){
    let input = document.getElementById("number")
      if (palindrome(input.value)){
        document.getElementById("output").innerHTML = "YES"

      } 
      else{
        document.getElementById("output").innerHTML = "NO"
      }
}
alert("hii")