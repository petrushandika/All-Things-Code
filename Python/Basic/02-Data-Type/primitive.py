# data type: unit digit (integer)
data_int = 1
print("value : ", data_int, "- data type: ", type(data_int))

# data type: value with comma (float)
data_float = 1.5
print("value : ", data_float, "- data type: ", type(data_float))

# data type: data set character (string)
data_string = "test"
print("value : ", data_string, "- data type: ", type(data_string))

# data type: biner true or false (boolean)
data_bool = True
print("value : ", data_bool, "- data type: ", type(data_bool))

## data type special

# complex numbers
data_complex = complex(5, 6)
print("value : ", data_complex, "- data type: ", type(data_complex))

# data type from c programming language
from ctypes import c_double
data_double = c_double(10.5)
print("value : ", data_double, "- data type: ", type(data_double))
