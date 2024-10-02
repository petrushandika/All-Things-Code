package main

import "fmt"

func main() {
	// mathematics operator
	var a = 20
	var b = 10
	// addition operator
	var c = a + b
	fmt.Println(c)

	// subtraction operator
	var d = a - b
	fmt.Println(d)

	// multiple operator
	var e = a * b
	fmt.Println(e)

	// division operator
	var f = a / b
	fmt.Println(f)

	// modulo operator
	var g = a % b
	fmt.Println(g)

	// augmented assignments
	var i = 10
	i += 10
	fmt.Println(i)
	
	i -= 5
	fmt.Println(i)
	
	// unary operator
	var j = 1;
	j++
	fmt.Println(j)
	
	j--
	fmt.Println(j)
}