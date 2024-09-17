package main

import "fmt"

func main() {
	// conversion number
	var value32 int32 = 32768
	var value64 int64 = int64(value32)
	var value16 int16 = int16(value32)

	fmt.Println(value32)
	fmt.Println(value64)
	fmt.Println(value16)

	// conversion string
	// notes: uint is unsigned integer
	var name = "Petrus Handika"
	var e uint8 = name[0]
	var eString = string(e)

	fmt.Println(name)
	fmt.Println(e)
	fmt.Println(eString)
}