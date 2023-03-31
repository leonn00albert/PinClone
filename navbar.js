function checkCashRegister(price, cash, cid) {
    let diff = cash - price;
    let total = 0;
 
    countMoney(diff)
    let change = {}
    return change;
}

checkCashRegister(19.5, 20, [["PENNY", 1.01], ["NICKEL", 2.05], ["DIME", 3.1], ["QUARTER", 4.25], ["ONE", 90], ["FIVE", 55], ["TEN", 20], ["TWENTY", 60], ["ONE HUNDRED", 100]]);

const money = {
    "ONE HUNDRED": 100,
    "TWENTY": 20,
    "TEN": 10,
    "FIVE": 5,
    "ONE": 1,
    "QUARTER": 0.25,
    "DIME": 0.1,
    "NICKEL": 0.05,
    "PENNY": 0.01,
}

function countMoney(diff) {
  let change = {

  }
  let tmp = 0;
    for (let val in money) {
        if (diff - money[val] > 0) {
          console.log(val)
           tmp = diff - money[val];
          let result = '';
let i = 0;

do {
  i = i + 1;
  result = result + i;
  } while (i < 5);

        }
    }
    console.log(change);
    return tmp;
}
checkCashRegister(19.5, 20, [["PENNY", 1.01], ["NICKEL", 2.05], ["DIME", 3.1], ["QUARTER", 4.25], ["ONE", 90], ["FIVE", 55], ["TEN", 20], ["TWENTY", 60], ["ONE HUNDRED", 100]]);


