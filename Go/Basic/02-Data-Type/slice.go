package main

import "fmt"

func main() {
	names := [...]string{"Petrus", "Handika", "Sinaga", "Budi", "Jamal", "Memet"}
	x := names[4:6]
	fmt.Println(x)

	y := names[:3]
	fmt.Println(y)

	z := names[3:]
	fmt.Println(z)

	a := names[:]
	fmt.Println(a)

	days := [...]string{"Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"}

	dayX := days[5:]
	fmt.Println(dayX)

	dayX[0] = "Sabtu Baru"
	dayX[1] = "Minggu Baru"
	fmt.Println(dayX)
	fmt.Println(days)

	dayZ := append(dayX, "Libur Baru")
	dayZ[0] = "Sabtu Lama"
	fmt.Println(dayX)
	fmt.Println(dayZ)
	fmt.Println(days)

	newSlice := make([]string, 2, 5)
	newSlice[0] = "Petrus"
	newSlice[1] = "Handika"

	fmt.Println(newSlice)
	fmt.Println(len(newSlice))
	fmt.Println(cap(newSlice))

	newSliceX := append(newSlice, "Sinaga")
	fmt.Println(newSliceX)
	fmt.Println(len(newSliceX))
	fmt.Println(cap(newSliceX))

	newSliceX[0] = "Ujang"
	fmt.Println(newSliceX)
	fmt.Println(newSlice)

	fromSlice := days[:]
	toSlice := make([]string, len(fromSlice), cap(fromSlice))

	copy(toSlice, fromSlice)

	fmt.Println(fromSlice)
	fmt.Println(toSlice)

	isArray := [...]int{1, 2, 3, 4, 5}
	isSlice := []int{1, 2, 3, 4, 5}

	fmt.Println(isArray)
	fmt.Println(isSlice)
}