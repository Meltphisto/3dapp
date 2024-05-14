var animating = false;

function AnimationOn()
{
    animating = !animating;
    document.getElementById('model__RotationTimer').setAttribute('enabled',animating.toString());
    
}

function AnimationOff()
{
    animating = false;
    document.getElementById('model__RotationTimer').setAttribute('enabled',animating.toString())
}

function AnimationModel()
{
    alert("1111");
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}