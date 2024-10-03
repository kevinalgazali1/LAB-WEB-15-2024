// nomor 1
function countEvenNumbers(start, end) {
    let count = 0;
    let genap = [];

    for (let i = start; i <= end; i++) {
      if (i % 2 === 0) {
        count++;
        
        genap.push(i);
      }
    }
    return `${count} (${genap.join(', ')})`;
  }
  
  console.log("Output : ",countEvenNumbers(1, 10)); 
