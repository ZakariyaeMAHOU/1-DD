export class Etudiant {
    constructor (nom, age) {
        this.nom = nom;
        this.age = age;
    }
    info() {
        return `Nom: ${this.nom} Age: ${this.age}`;
    }
}