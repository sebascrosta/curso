const nums = ["I", "IV", "XI", "PA", "X", "XA", "VI", "UV", "X"]
const equivalent = {
  "I":1,
  "IV":4,
  "XI": 11,
  "X": 10,
  "VI": 6
}

let filtrado = nums.filter((num) => {
  return equivalent.hasOwnProperty(num)
})

let mapeado = filtrado.map((num) => {
  return equivalent[num]
})


console.log(mapeado.reduce(function(ant,act){
  return ant + act
}))
