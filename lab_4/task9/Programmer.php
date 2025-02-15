<?php

class Programmer extends Human {
    protected $programmingLanguages;
    protected $experience;

    public function __construct($height, $weight, $age, $programmingLanguages, $experience) {
        parent::__construct($height, $weight, $age);
        $this->programmingLanguages = $programmingLanguages;
        $this->experience = $experience;
    }

    protected function birthMessage() {
        echo "Програміст народив дитину xD";
    }

    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setProgrammingLanguages($programmingLanguages) {
        $this->programmingLanguages = $programmingLanguages;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function addProgrammingLanguage($language) {
        $this->programmingLanguages[] = $language;
    }

    public function cleanRoom() {
        echo "Програміст прибирає кімнату";
    }

    public function cleanKitchen() {
        echo "Програміст прибирає кухню";
    }
}