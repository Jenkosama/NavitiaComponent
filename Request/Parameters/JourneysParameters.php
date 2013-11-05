<?php

namespace Navitia\Component\Request\Parameters;

/**
 * Description of JourneysParameters
 *
 * @copyright (c) 2013, CANALTP
 * @author rndiaye
 */
class JourneysParameters extends AbstractParameters
{
    protected $from;
    protected $to;
    protected $datetime;
    protected $datetime_represents;

    /**
     * @Assert\Min(value = 1)
     */
    protected $max_duration;
    protected $walking_speed;
    protected $bike_speed;
    protected $car_speed;
    protected $departure_mode;
    protected $arrival_mode;
    protected $forbidden_uris;
    protected $walking_distance;
    protected $bike_distance;
    protected $car_distance;
    protected $wheelchair;
    protected $journey_type;
    protected $count;

    public function getFrom()
    {
        return $this->from;
    }

    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    public function getDatetime()
    {
        return $this->datetime;
    }

    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
        return $this;
    }

    public function getDatetimeRepresents()
    {
        return $this->datetime_represents;
    }

    public function setDatetimeRepresents($datetime_represents)
    {
        $this->datetime_represents = $datetime_represents;
        return $this;
    }

    public function getMaxDuration()
    {
        return $this->max_duration;
    }

    public function setMaxDuration($max_duration)
    {
        $this->max_duration = $max_duration;
        return $this;
    }

    public function getWalkingSpeed()
    {
        return $this->walking_speed;
    }

    public function setWalkingSpeed($walking_speed)
    {
        $this->walking_speed = $walking_speed;
        return $this;
    }

    public function getBikeSpeed()
    {
        return $this->bike_speed;
    }

    public function setBikeSpeed($bike_speed)
    {
        $this->bike_speed = $bike_speed;
        return $this;
    }

    public function getCarSpeed()
    {
        return $this->car_speed;
    }

    public function setCarSpeed($car_speed)
    {
        $this->car_speed = $car_speed;
        return $this;
    }

    public function getDepartureMode()
    {
        return $this->departure_mode;
    }

    public function setDepartureMode($departure_mode)
    {
        $this->departure_mode = $departure_mode;
        return $this;
    }

    public function getArrivalMode()
    {
        return $this->arrival_mode;
    }

    public function setArrivalMode($arrival_mode)
    {
        $this->arrival_mode = $arrival_mode;
        return $this;
    }

    public function getForbiddenUris()
    {
        return $this->forbidden_uris;
    }

    public function setForbiddenUris($forbidden_uris)
    {
        $this->forbidden_uris = $forbidden_uris;
        return $this;
    }

    public function getWalkingDistance()
    {
        return $this->walking_distance;
    }

    public function setWalkingDistance($walking_distance)
    {
        $this->walking_distance = $walking_distance;
        return $this;
    }

    public function getBikeDistance()
    {
        return $this->bike_distance;
    }

    public function setBikeDistance($bike_distance)
    {
        $this->bike_distance = $bike_distance;
        return $this;
    }

    public function getCarDistance()
    {
        return $this->car_distance;
    }

    public function setCarDistance($car_distance)
    {
        $this->car_distance = $car_distance;
        return $this;
    }

    public function getWheelchair()
    {
        return $this->wheelchair;
    }

    public function setWheelchair($wheelchair)
    {
        $this->wheelchair = $wheelchair;
        return $this;
    }

    public function getJourneyType()
    {
        return $this->journey_type;
    }

    public function setJourneyType($journey_type)
    {
        $this->journey_type = $journey_type;
        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
}
