export class Stagiaire extends Etudiant {
    constructor (nom, age, stage) {
        super(nom, age);
        this.stage = stage;
    }
    infos() {
        return `${this.info()} Stage: ${this.stage}`;
    }
}