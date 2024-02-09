document.addEventListener('DOMContentLoaded', function () {
    // Sample data
    const choreData = [
        { status: 'Not Started', name: 'Chore 1', details: 'Details for Chore 1' },
        { status: 'In Progress', name: 'Chore 2', details: 'Details for Chore 2' },
        { status: 'Completed', name: 'Chore 3', details: 'Details for Chore 3' },
    ];

    // Display counts
    document.getElementById('notStartedCount').textContent = choreData.filter(chore => chore.status === 'Not Started').length;
    document.getElementById('inProgressCount').textContent = choreData.filter(chore => chore.status === 'In Progress').length;
    document.getElementById('completedCount').textContent = choreData.filter(chore => chore.status === 'Completed').length;

    // Display assigned chores
    const choresList = document.getElementById('choresList');
    choreData.forEach(chore => {
        const li = document.createElement('li');
        li.innerHTML = `<span>${chore.name}:</span>${chore.details}`;
        li.classList.add(chore.status.toLowerCase().replace(' ', '-'));
        choresList.appendChild(li);
    });
});
