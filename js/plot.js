function simpleScatterPlot (filename) {


// Set margins and size
var margin = {top: 50, right: 80, bottom: 100, left: 80},
    width = 900 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var x = d3.scale.linear()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var y1 = d3.scale.linear().range([height, 0]);

var color = d3.scale.category10();

var xAxis = d3.svg.axis()
    .ticks(8)
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .ticks(5);

var yAxisRight = d3.svg.axis().scale(y1).orient("right").ticks(5);

var svg = d3.select(".svg-holder-simple").append("svg")
  
.attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
    .append("g")
        .attr("transform", 
              "translate(" + margin.left + "," + margin.top + ")");

var valueline = d3.svg.line()
  .x(function(d) {return x(d.percentage_diabetes);})
  .y(function(d) {return y(d.per_capita_spend);});

var valueline2 = d3.svg.line()
  .x(function(d) {return x(d.percentage_diabetes);})
  .y(function(d) {return y1(d.total_spend);});

d3.csv(filename, function(error, data) {
  data.forEach(function(d) {
    d.percentage_diabetes = +d.percentage_diabetes;
    d.per_capita_spend = +d.per_capita_spend;
    d.total_spend = +d.total_spend;
  });

  x.domain(d3.extent(data, function(d) { return d.percentage_diabetes; })).nice();
  y.domain(d3.extent(data, function(d) { return d.per_capita_spend; })).nice();
 y1.domain(d3.extent(data, function(d) { return d.total_spend; })).nice();


  // Add valueline path
  svg.append("path")
    .style("stroke", "#b6b6ff")
    .attr("d", valueline(data));

  // Add valueline2 path
  svg.append("path")
    .style("stroke", "red")
    .attr("d", valueline2(data));

  // Draw x axis
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
      .style("fill", "white")
    .append("text")
      .attr("class", "label")
      .attr("x", width)
      .attr("y", 80)
      .style("text-anchor", "end")
      .text("Wavelength (nm)")
          .style("fill", "white");

  // Draw y axis
  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
      .style("fill", "#b6b6ff")
    .append("text")
      .attr("class", "label")
      .attr("transform", "rotate(-90)")
      .attr("y", 20 )
      .attr("dy", ".71em")
      .attr("class", "label")
      .style("text-anchor", "end")
      .text("n")
      .style("fill", "#b6b6ff");


  // Draw y axis
  svg.append("g")
      .attr("class", "y axis")
      .attr("transform", "translate(" + width + ")")
      .call(yAxisRight)
      .style("fill", "red")
      
    .append("text")
      .attr("class", "label")
      .attr("transform", "rotate(-90)")
      .attr("y", -40 )
      .attr("dy", ".71em")
      .attr("class", "label")
      .style("text-anchor", "end")
      .text("k")
      .style("fill", "red")



});

}

function plotNew(filename) {
  _("plot").innerHTML= "";
  simpleScatterPlot(filename);
}

