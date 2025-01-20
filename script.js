/* FIZZ BUZZ
make a program that counts up from zero. If number is a 
multiple of 3, replace with 'fizz', 
multiple of 5, replace with 'buzz', 
multiple of BOTH 3 and 5, replace with 'fizzbuzz'
*/

for (let i=1; i<21; i++) {
	if (i % 5 == 0 && i % 3 == 0){
		console.log('FIZZBUZZ');
	} else if (i % 5 == 0){ 
		console.log('buzz'); 
	} else if (i % 3 == 0){  
		console.log('fizz');
	} else {
		console.log(i);
	}
}


