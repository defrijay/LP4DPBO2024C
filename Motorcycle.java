package Java;

public class Motorcycle extends Vehicle {
    private String type;
    private int tankCapacity;

    public Motorcycle(String plateNumber, String brand, int year, String color, String type, int tankCapacity) {
        super(plateNumber, brand, year, color);
        this.type = type;
        this.tankCapacity = tankCapacity;
    }

    @Override
    public void displayInfo() {
        super.displayInfo();
        System.out.println("Type: " + type);
        System.out.println("Tank Capacity: " + tankCapacity + " liters");
    }
}

