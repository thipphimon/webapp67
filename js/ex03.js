const digitize = (n) => [...`${Math.abs(n)}`].map((i) => parseInt(i));
console.log('Array_of = '  + digitize(123));
console.log('Array_of = ' + digitize(1230));

