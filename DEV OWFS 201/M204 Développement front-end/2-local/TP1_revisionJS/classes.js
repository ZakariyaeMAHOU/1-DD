class Etudiant {
    constructor(nom, age) {
        this.nom = nom;
        this.age = age
    }
    info() {
        return `Etudiant nom:${this.nom} a pour
age:${this.age}`
    }
}

// Héritage de classe

class Stagiaire extends Etudiant {
    constructor(nom, age, stage) {
        super(nom, age);
        this.stage = stage;
    }
    // info() {
    //     return `${super.info()} stage:${this.stage}`
    // }
    info() {
        return `Stagiaire nom :${this.nom} age:${this.age} stage:${this.stage}`
    }
}

const et1 = new Etudiant("Yanis", 19);
const et2 = new Etudiant("Zakariyae", 19);
let stg1 = new Stagiaire("Rami", 23, "dev mobile");

console.log(et1.info());
console.log(et2.info());
console.log(stg1.info());


