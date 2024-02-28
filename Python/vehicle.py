class Vehicle:
    def __init__(self, plate_number, brand, year, color):
        self.plate_number = plate_number
        self.brand = brand
        self.year = year
        self.color = color

    def display_info(self):
        print("Plate Number:", self.plate_number)
        print("Brand:", self.brand)
        print("Year:", self.year)
        print("Color:", self.color)
