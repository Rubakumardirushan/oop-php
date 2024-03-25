package java_patterns;

interface vehicle {
    void drive();
}

class car implements vehicle {
    public void drive() {
        System.out.println("Driving a car");
    }
}

class bike implements vehicle {
    public void drive() {
        System.out.println("Driving a bike");
    }
}

interface vehicleFactory {
    vehicle getVehicle();
}

class carFactory implements vehicleFactory {
    public vehicle getVehicle() {
        return new car();
    }
}

class bikeFactory implements vehicleFactory {
    public vehicle getVehicle() {
        return new bike();
    }
}

public class factory {

    public static void main(String args[]) {
        vehicleFactory carFactory = new carFactory();
        vehicle car = carFactory.getVehicle();
        car.drive();

        vehicleFactory bikeFactory = new bikeFactory();
        vehicle bike = bikeFactory.getVehicle();
        bike.drive();
    }
}
