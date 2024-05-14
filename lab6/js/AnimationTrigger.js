var animating = false;

function AnimationOn()
{
    animating = !animating;
    document.getElementById('model_RotationTimer').setAttribute('enabled',animating.toString());
    
}

function AnimationOff()
{
    animating = false;
    document.getElementById('model_RotationTimer').setAttribute('enabled',animating.toString())
}

function AnimationModel()
{
    if(document.getElementById('model_RotationTimer').getAttribute('enabled') != true)
        document.getElementById('model_RotationTimer').setAttribute('enabled','true');
    else
        document.getElementById('model_RotationTimer').setAttribute('enabled','false');
}